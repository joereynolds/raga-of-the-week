
class Raga {

    constructor() {
        this.transposition_amount = 0
    }

    play(notes) {

      Tone.Transport.stop().start();
      highlightTableColumn(1)
      const synth = new Tone.PolySynth().toDestination();
      synth.triggerAttackRelease(
          Tone.Frequency('C2').transpose(this.transposition_amount),
          4);

      let index = 1
      let loop = new Tone.Loop(time => {
          highlightTableColumn(index);
          index++
      }, 0.5);

      loop.start().stop(5);

      let delay = Tone.now();
      for(let i = 0; i < notes.length; i++) {
          synth.triggerAttackRelease(
              Tone.Frequency(notes[i] + '4').transpose(this.transposition_amount),
              '8n',
              delay

          );
          delay += 0.5
      }

      // Play the first note an octave higher to simulate the 8th note
      synth.triggerAttackRelease(
          Tone.Frequency(notes[0] + '5').transpose(this.transposition_amount),
          '8n',
          delay
      );
    }

    transpose(amount) {
        this.transposition_amount += parseInt(amount)
        updateNotesInTable(amount)
    }
}

const raga = new Raga();

function highlightTableColumn(columnNumber) {
  document.querySelectorAll('table').forEach(table => {

      table.querySelectorAll('td').forEach(td => {
          td.classList.remove('highlighted');
          console.log('here')
          let index = [].indexOf.call(td.parentElement.children, td);
          if (index === columnNumber) {
              td.classList.add('highlighted');
          }
      });
  });
}

function updateNotesInTable(amount) {
    document.querySelectorAll('.note').forEach(note => {
        const original_value = note.innerText;
        const new_value = Tone.Frequency(
            original_value
        ).transpose(amount).toNote();

        note.innerText = new_value
    });
}

document.querySelectorAll("[data-notes]").forEach(button => {
  button.addEventListener('click', () => {
    raga.play(JSON.parse(button.dataset.notes))
  });
});

document.querySelectorAll("[data-transpose]").forEach(button => {
  button.addEventListener('click', () => {
    raga.transpose(button.dataset.transpose);
  });
});

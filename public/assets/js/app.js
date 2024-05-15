
class Raga {

    constructor() {
        this.transposition_amount = 0
    }

    play(notes) {

      Tone.Transport.stop().start();
      const synth = new Tone.PolySynth().toDestination();
      synth.triggerAttackRelease(
          Tone.Frequency('C2').transpose(this.transposition_amount),
          4
      );

      let i = 1;
      let j = notes.avarohana.length;
      const arohanaDuration = notes.arohana.length / 2;
      const avarohanaDuration = notes.avarohana.length / 2;

      const pattern = new Tone.Pattern((time, note) => {
          console.log(note + '4');
          console.log(this.transposition_amount);
          synth.triggerAttackRelease(
              Tone.Frequency(note).transpose(this.transposition_amount),
              '8n',
              time
          )

          Tone.Draw.schedule(() => {
              highlightTableColumn(i++);
          }, time);
      }, notes.arohana, "up").start(0).stop(arohanaDuration);

        const reversePattern = new Tone.Pattern((time, note) => {
          synth.triggerAttackRelease(
              Tone.Frequency(note).transpose(this.transposition_amount),
              '8n',
              time
          )

          Tone.Draw.schedule(() => {
              highlightTableColumn(j--);
          }, time);
        }, notes.avarohana, "up").start(arohanaDuration).stop(arohanaDuration + avarohanaDuration);
    }

    transpose(amount) {
        this.transposition_amount += parseInt(amount)
        updateNotesInTable(amount)
    }
}

const raga = new Raga();

function highlightTableColumn(columnNumber) {
  document.querySelectorAll('table td').forEach(td => {
      td.classList.remove('highlighted');
      console.log('here')
      let index = [].indexOf.call(td.parentElement.children, td);

      if (index === columnNumber) {
          td.classList.add('highlighted');
      }
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

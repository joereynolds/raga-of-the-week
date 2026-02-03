
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
              highlightRagaTableColumn(i++);
          }, time);
      }, notes.arohana, "up").start(0).stop(arohanaDuration);

        const reversePattern = new Tone.Pattern((time, note) => {
          synth.triggerAttackRelease(
              Tone.Frequency(note).transpose(this.transposition_amount),
              '8n',
              time
          )

          Tone.Draw.schedule(() => {
              highlightRagaTableColumn(j--);
          }, time);
        }, notes.avarohana, "up").start(arohanaDuration).stop(arohanaDuration + avarohanaDuration);
    }

    playVarisai(notes) {
      Tone.Transport.stop().start();
      const synth = new Tone.PolySynth().toDestination();
      synth.triggerAttackRelease(
          Tone.Frequency('C2').transpose(this.transposition_amount),
          4
      );

      let i = 0;
      const duration = notes.length / 2;

      const pattern = new Tone.Pattern((time, note) => {
          synth.triggerAttackRelease(
              Tone.Frequency(note).transpose(this.transposition_amount),
              '8n',
              time
          )

          Tone.Draw.schedule(() => {
              highlightVarisaiNote(i++);
          }, time);
      }, notes, "up").start(0).stop(duration);
    }

    transpose(amount) {
        this.transposition_amount += parseInt(amount)
        updateNotesInTable(amount)
    }
}

const raga = new Raga();

function highlightRagaTableColumn(columnNumber) {
  document.querySelectorAll('#raga-table td').forEach(td => {
      td.classList.remove('highlighted');
      let index = [].indexOf.call(td.parentElement.children, td);

      if (index === columnNumber) {
          td.classList.add('highlighted');
      }
  });
}

function highlightVarisaiNote(noteIndex) {
  document.querySelectorAll('#varisai-table table td').forEach((td, index) => {
      td.classList.remove('highlighted');
      if (index === noteIndex) {
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

document.querySelectorAll("[data-varisai-play]").forEach(button => {
  button.addEventListener('click', () => {
    const varisaiTable = document.getElementById('varisai-table');
    if (varisaiTable && varisaiTable.dataset.notes) {
      raga.playVarisai(JSON.parse(varisaiTable.dataset.notes));
    }
  });
});

document.querySelectorAll("[data-transpose]").forEach(button => {
  button.addEventListener('click', () => {
    raga.transpose(button.dataset.transpose);
  });
});

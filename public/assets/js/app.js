(function() {
  // I am sorry for appropriating your culture badly
  function playRaga(notes) {
      Tone.Transport.stop().start();
      highlightTableColumn(1)
      const synth = new Tone.PolySynth().toDestination();
      synth.triggerAttackRelease('C2', 4);

      index = 1
      loop = new Tone.Loop(time => {
          highlightTableColumn(index);
          index++
      }, 0.5);

      loop.start().stop(5);

      let delay = Tone.now();
      for(let i = 0; i < notes.length; i++) {
          synth.triggerAttackRelease(notes[i] + '4', '8n', delay);
          delay += 0.5
      }

      // Play the first note an octave higher to simulate the 8th note
      synth.triggerAttackRelease(notes[0] + '5', '8n', delay);
  }

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

  document.querySelectorAll("button").forEach(button => {
      button.addEventListener('click', () => {
        playRaga(JSON.parse(button.dataset.notes))
      });
  });
})();

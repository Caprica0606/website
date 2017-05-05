(function() {
'use strict';
// click
document.body.addEventListener('click', copy, true);
// event handler
function copy(e) {
  // find target element
  var
    t = e.target,
    c = t.dataset.copytarget,
    inp = (c ? document.querySelector(c) : null);
  // check if selected
  if (inp && inp.select) {
    // select text
    inp.select();
    try {
      // copy text
      document.execCommand('copy');
      inp.blur();
      // copied animation
      t.classList.add('copied');
      setTimeout(function() { t.classList.remove('copied'); }, 1500);
    }
    catch (err) {
      alert('please press Ctrl/Cmd+C to copy');
    }
  }
}
})();

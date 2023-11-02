


function autoExpand(textarea) {
  textarea.style.height = 'auto';
  textarea.style.height = (textarea.scrollHeight) + 'px';
}

document.getElementById('miTextarea').addEventListener('input', function () {
  autoExpand(this);
});


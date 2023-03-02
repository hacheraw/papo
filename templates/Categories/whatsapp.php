<?php foreach ($categories as $category) : ?>
  <?= $this->element('Categories/category', compact('category')) ?>
<?php endforeach; ?>

<div id="generator">
  <button id="send">Enviar!</button>
</div>

<script>
  const generator = document.getElementById('generator');
  const tasks = document.querySelectorAll('input[type="checkbox"]');
  const button = document.getElementById('send');

  tasks.forEach(task => {
    task.addEventListener('change', () => {
      if (task.checked) {
        const line = document.createElement('span');
        line.innerText = `✅ ${task.dataset.text}`;
        line.id = `line-${task.dataset.id}`;
        line.classList.add('line');
        generator.appendChild(line);
      } else {
        const line = document.getElementById(`line-${task.dataset.id}`);
        generator.removeChild(line);
      }

      button.style.display = generator.childElementCount > 1 ? 'block' : 'none';
    })
  });
  button.addEventListener('click', () => {
    const lines = document.querySelectorAll('.line');
    const text = [...lines].map(line => encodeURI(line.innerText)).join('%0a');
    const url = `whatsapp://send?text=${text}`;
    window.open(url, '_blank');
  });
</script>
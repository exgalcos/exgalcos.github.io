---
title: Gallery
permalink: /gallery/
---

<h2>Gallery</h2>

<div class="gallery">
  {% for file in site.static_files %}
    {% if file.path contains '/gallery/' and file.path contains '.jpeg' %}
      <div class="gallery-item">
        <a href="{{ file.path }}" class="gallery-link">
          <img src="{{ file.path }}" alt="{{ file.name }}">
        </a>
      </div>
    {% endif %}
  {% endfor %}
</div>

<div id="image-modal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" src="">
</div>

<script>
var modal = document.getElementById("image-modal");
var modalContent = modal.getElementsByClassName("modal-content")[0];
var modalClose = modal.getElementsByClassName("close")[0];

var links = document.getElementsByClassName("gallery-link");
for (var i = 0; i < links.length; i++) {
  links[i].onclick = function(event) {
    event.preventDefault();
    var imageUrl = this.getAttribute("href");
    modalContent.setAttribute("src", imageUrl);
    modal.style.display = "block";
  };
}

modalClose.onclick = function() {
  modal.style.display = "none";
};
</script>
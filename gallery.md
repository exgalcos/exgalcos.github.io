---
title: Gallery
permalink: /gallery/
---
{% for event in site.events %}
  <h2>{{ event.title }}</h2>
  <a href="#" class="event-gallery-link" data-images="{{ site.baseurl }}{{ event.url }}/images/"><img src="{{ event.gallery_image }}" alt="{{ event.title }} Image"></a>
{% endfor %}

<div id="event-gallery-modal" class="modal">
  <span class="close">&times;</span>
  <div class="modal-content"></div>
</div>

<script>
var modal = document.getElementById("event-gallery-modal");
var modalContent = modal.getElementsByClassName("modal-content")[0];
var modalClose = modal.getElementsByClassName("close")[0];

var links = document.getElementsByClassName("event-gallery-link");
for (var i = 0; i < links.length; i++) {
  links[i].onclick = function(event) {
    event.preventDefault();
    var images = this.getAttribute("data-images");
    modalContent.innerHTML = "";
    modal.style.display = "block";
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          var imagesHtml = "";
          var imagesData = JSON.parse(xhr.responseText);
          for (var j = 0; j < imagesData.length; j++) {
            imagesHtml += '<img src="' + images + imagesData[j] + '" alt="">';
          }
          modalContent.innerHTML = imagesHtml;
        } else {
          console.log("Error: " + xhr.status);
        }
      }
    };
    xhr.open("GET", images, true);
    xhr.send();
  };
}

modalClose.onclick = function() {
  modal.style.display = "none";
};
</script>
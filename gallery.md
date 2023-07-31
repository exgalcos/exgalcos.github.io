---
title: Gallery
permalink: /gallery/
---

<div class='container'>
  <header class="masthead text-center">
    <h1>Gallery</h1>
    <div class="gallery">
      {% for event in site.gallery %}
        <div class="event">
          <h3>{{ event.title }}</h3>
          <a href="{{ event.url }}">
            <img src="/gallery/{{ event.photos_folder }}/{{ event.represent_photo }}" alt="{{ event.title }}" />
          </a>
        </div>
      {% endfor %}
    </div>
  </header>
</div>
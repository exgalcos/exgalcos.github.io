---
layout: default
title: Gallery
permalink: /gallery/
---

<div class='container'>
  <header class="masthead text-center">
    <h1>Gallery</h1>
    <div class="gallery">
      {% for event in site.data.gallery.events %}
        <div class="event">
          <h3>{{ event.title }}</h3>
          <a href="/gallery/{{ event.folder }}/">
            <img src="/gallery/{{ event.folder }}/{{ event.representative_photo }}" alt="{{ event.title }}" />
          </a>
        </div>
      {% endfor %}
    </div>
  </header>
</div>

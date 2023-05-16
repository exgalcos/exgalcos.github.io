---
title: Gallery
permalink: /gallery/
---

<div class='container'>
  <header class="masthead text-center">
    <h1>Events</h1>
    <div class="gallery">
      {% assign sorted_events = site.gallery | sort: 'year' %}
      {% for event in sorted_events %}
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
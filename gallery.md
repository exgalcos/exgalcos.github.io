---
title: Gallery
permalink: /gallery/
---

{% assign gallery_files = site.static_files | where: "path", "gallery" %}
{% assign sorted_gallery_files = gallery_files | sort: "date" %}

{% for file in sorted_gallery_files %}
  {% assign element = file.basename | replace: "-", " " %}
  {% assign element_data = site._gallery | where: "title", element | first %}

  {% if element_data %}
    <div>
      <h2><a href="{{ file.path }}">{{ element_data.title }}</a></h2>
      <img src="{{ site.baseurl }}{{ element_data.gallery_image }}" alt="{{ element_data.title }}">
    </div>
  {% endif %}
{% endfor %} 

---

{% assign gallery_sorted = site._gallery | sort: 'title' %}
{% assign year_array = "2023|2022" | split: "|" %}

{% for role in year_array %}

{% assign gallery_in_year = gallery_sorted | where: 'Date', role %}

<!-- Skip section if there's nobody -->
{% if gallery_in_year.size == 0 %}
  {% continue %}
{% endif %}

<div class="pos_header">
{% if role == '2023' %}
<h3>2023</h3>
{% elsif role == '2022' %}
<h3>2022</h3>
{% endif %}
</div>


<div class="content list gallery">
  {% for profile in gallery_sorted %}
    {% if profile.date contains role %}
      <div class="list-item-gallery">
        <p class="list-post-title">
          {% if profile.avatar %}
            <a href="{{ site.baseurl }}{{ profile.url }}"><img class="profile-thumbnail" src="{{site.baseurl}}/gallery/{{profile.avatar}}"></a>
          {% else %}
            <a href="{{ site.baseurl }}{{ profile.url }}"><img class="profile-thumbnail" src="http://evansheline.com/wp-content/uploads/2011/02/facebook-Storm-Trooper.jpg"></a>
          {% endif %}
          <a class="title" href="{{ site.baseurl }}{{ profile.url }}">{{ profile.title }}</a>
        </p>
      </div>    
    {% endif %}
  {% endfor %}
</div>
<hr>
{% endfor %}

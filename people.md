---
title: People
permalink: /people/
---

{% assign people_sorted = site.people | sort: 'joined' %}
{% assign role_array = "pi|postdoc|phd|int|under|former" | split: "|" %}

{% for role in role_array %}

{% assign people_in_role = people_sorted | where: 'position', role %}

<!-- Skip section if there's nobody -->
{% if people_in_role.size < 0 %}
  {% continue %}
{% endif %}

<div class="pos_header">
{% if role == 'pi' %}
<h3>Profressor</h3>
{% elsif role == 'postdoc' %}
<h3>Postdoctoral Fellows</h3>
{% elsif role == 'phd' %}
<h3>PhD Course</h3>
{% elsif role == 'int' %}
<h3>Integrated MS/PhD Course</h3>
{% elsif role == 'under' %}
<h3>Undergraduate Students</h3>
{% elsif role == 'former' %}
<h3>Former Members</h3>
{% endif %}
</div>

{% if role != 'former' %}
<div class="content list people">
  {% for profile in people_sorted %}
    {% if profile.position contains role %}
      <div class="list-item-people">
        <p class="list-post-title">
          {% if profile.avatar %}
            <a href="{{ site.baseurl }}{{ profile.url }}"><img class="profile-thumbnail" src="{{site.baseurl}}/images/people/{{profile.avatar}}"></a>
          {% else %}
            <a href="{{ site.baseurl }}{{ profile.url }}"><img class="profile-thumbnail" src="http://evansheline.com/wp-content/uploads/2011/02/facebook-Storm-Trooper.jpg"></a>
          {% endif %}
          <a class="name" href="{{ site.baseurl }}{{ profile.url }}">{{ profile.name }}</a>
        </p>
      </div>    
    {% endif %}
  {% endfor %}
</div>
<hr>

{% else %}

<br>

| Who are they | When were they here | Where they went |
| :------------- |:-------------| :-----------| :-----------|
| Wooseok Kang | Undergraduate Intern (2021.12 - 2024.08) | Graduate Student, UChicago |
| Avery Abramson | Undergraduate Intern (2024.06 - 07) | | 
| Yonguk Cho | Undergraduate Intern (2024.03 - 06) | Graduate Student, UST | 
| Jae Won Lee | Undergraduate Intern (2022.03 - 08) | Graduate Student, SNU | 
| Tae Wan Kim | Undergraduate Intern (2021.07 - 2023.02) | Graduate Student, SNU | 
| Jae Yeon (Marcie) Mun | MS Student | Postdoc, IAP | 
| Byungmoo Lim | Undergraduate Intern (2023.06 - 08) | | 
| Hanbee Seo | Undergraduate Intern (2023.06 - 07) |  | 

{% endif %}
{% endfor %}

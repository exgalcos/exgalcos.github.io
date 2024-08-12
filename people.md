---
title: People
permalink: /people/
---

{% assign people_sorted = site.people | sort: 'joined' %}
{% assign role_array = "pi|postdoc|grad|under|former" | split: "|" %}

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
{% elsif role == 'grad' %}
<h3>Graduate Students</h3>
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

| Who are they | When were they here | Where they went | Contact |
| :------------- |:-------------| :-----------| :-----------|
| Avery Abramson | Undergraduate Intern | | aabramson@utexas.edu |
| Yonguk Cho | Undergraduate Intern | | |
| Jae Won Lee | Undergraduate Intern (?) | Graduate Student, SNU | jwon3867@gmail.com |
| Tae Wan Kim | Undergraduate Intern (?) | Graduate Student, SNU | ktw8517@snu.ac.kr |
| Jae Yeon (Marcie) Mun | MS Student (?) | Graduate Student, ANU | jaeyeon.mun@anu.edu.au |
| Byungmoo Lim | Undergraduate Intern (2022 - 2022) | | byungmoolim@postech.ac.kr |
| Hanbee Seo | Undergraduate Intern (2022 - 2022) | | hs223@st-andrews.ac.uk |

{% endif %}
{% endfor %}

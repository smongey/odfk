
title: -
pages: false
fields:
 title:
   label: Title
   type: text
 testimonials:
   label: Client Testimonials
   type: structure
   entry: >
     <strong>Name: </strong><i>{{name}}</i></br>
     <strong>Profile Image: </strong><i>{{profile}}</i></br>
     <strong>Company Name: </strong><i>{{company}}</i></br>
     <strong>Testimonial: </strong><i>{{info}}</i></br>
     <strong>Website Url: </strong><i>{{link}}</i></br>
   fields:
     name:
       label: Client Name
       type: text
     profile:
       label: Client Photo
       type: text
     company:
       label: Client Company
       type: text 
     info:
       label: Client Testimonial
       type: textarea
     link:
       label: Client Website
       type: url
  mainpic2:
    label: Main Home Image
    type: structure
    entry: >
      <img src="http://localhost:8000/content/home/{{mainpic}}" alt="" width="100%"><br/>
      {{alt}}
    fields:
      mainpic:
        label: Main Photo
        type: select
        options: images
      alt:
        label: Alternative Text
        type: text
  mainpic:
    label: Main Homepage Image
    type: select
    options: images


 info:
   label: Partner Text
   type: text
 partners:
   label: Partners
   type: structure
   entry: >
     <strong>Partner: </strong><i>{{name}}</i></br>
     <strong>Logo: </strong><i><br><img src="{{logo}}" alt="" height="60"></i></br>
     <strong>Website Url: </strong><i>{{link}}</i></br>
   fields:
     name:
       label: Partner Name
       type: text
     logo:
       label: Partner Logo
       type: text
     link:
       label: Partner Website
       type: url 


  partners:
    label: Partners
    type: structure
    entry: >
      <strong>Partner: </strong><i>{{name}}</i></br>
      <strong>Logo: </strong><i><br><img src="{{logo}}" alt="" height="60"></i></br>
      <strong>Website Url: </strong><i>{{link}}</i></br>
      <strong>Website Url: </strong><i>{{link}}</i></br>
    fields:
      name:
        label: Partner Name
        type: text
      logo:
        label: Partner Logo
        type: text
      link:
        label: Partner Website
        type: url 
  postimage:
    label: Main Image
    type:  selector
    mode:  single
    types:
        - image
  aboutpic1:
    label: About 1 (760x760)
    type:  selector
    mode:  single
    width: 1/2
    types:
        - image
  aboutpic2:
    label: About 2 (760x760)
    type:  selector
    mode:  single
    width: 1/2
    types:
        - image     
  aboutpic3:
    label: About 1 (1600x855)
    type:  selector
    mode:  single
    types:
        - image 
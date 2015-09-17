<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text

  maintext:
    label: Main Homepage Title
    type: text

  mainpic:
    label: Image 3
    type: select
    options: images
    help: (1600x855)

  about:
    label: About Text
    type: textarea

  aboutpic1:
    label: Image 1
    type: select
    width: 1/2
    options: images
    help: (760x760)

  aboutpic2:
    label: Image 2
    type: select
    width: 1/2
    options: images
    help: (760x760)

  aboutpic3:
    label: Image 3
    type: select
    options: images
    help: (1600x855)
  areas:
    label: Areas
    type: structure
    entry: >
      <img src="../content/1-home/{{areapic}}" alt=""></br>
      {{areatitle}}
    fields:
      areapic:
        label: Image
        type: select
        options: images
        help: (480x480)
      areatitle:
        label: Title
        type: text

  becometext:
    label: Become Exhibitor Text
    type: textarea

  becomepic:
    label: Become Exhibitor Image
    type: select
    options: images
    help: (800x760)

  becomelink:
    label: Become Exhibitor Link
    type: text

  forlink:
    label: For Exhibitor Link
    type: text

  team:
    label: Team
    type: structure
    entry: >
      <strong>Name: </strong><i>{{name}}</i></br>
      <strong>Role: </strong><i>{{role}}</i></br>
      <strong>Image: </strong><br/><img src="../content/1-home/{{profile}}" alt=""></br>
      <strong>Phone: </strong><i>{{phone}}</i></br>
      <strong>Email: </strong><i>{{email}}</i></br>
    fields:
      name:
        label: Name
        type: text
      role:
        label: Role
        type: text
      profile:
        label: Image
        type: select
        options: images
        help: (130x150) 
      phone:
        label: Phone
        type: tel
      email:
        label: Email
        type: text

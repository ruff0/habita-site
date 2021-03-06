<?php if(!defined('KIRBY')) exit ?>

title: Landing Page
pages: false
files: true
  sortable: true
icon: th-list
fields:
  title:
    label: Title
    type: text


  intro_headline:
    label: Intro
    type: headline

  test_text:
    label: Intro text (first block)
    type: textarea
    icon: text-width

  testagain_text:
    label: Intro text (second block)
    type: textarea
    icon: text-width


  features_headline:
    label: Features
    type: headline
    
  features_title:
    label: Features title
    type: text
    icon: font
  features_text:
    label: Features text
    type: textarea
    icon: text-width
  features:
    label: Features
    type: structure
    style: table
    modalsize: small
    fields:
      title:
        label: Title
        type: text
      icon:
        label: Icon
        type: select
        options:
          food: food
          wifi: wifi
          time: time
          drink: drink
          envelope: envelope
          presentation: presentation
          coffee: coffee
          printer: printer
          boiler: boiler



  membership_headline:
    label: Membership
    type: headline

  membership_title:
    label: Membership title
    type: text
    icon: font
  membership_text:
    label: Membership text
    type: textarea
    icon: text-width
  membership_options:
    label: Membership options
    type: structure
    style: table
    modalsize: small
    fields:
      title:
        label: Title
        type: text
      icon:
        label: Icon
        type: select
        options:
          desk: desk
          office: office
          flexible: flexible



  events_headline:
    label: Events
    type: headline

  events_title:
    label: Events title
    type: text
    icon: font
  events_text:
    label: Events text
    type: textarea
    icon: text-width

  actionbar_info:
    label: ———
    type: info
    text: >

  actionbar_text:
    label: Action bar text
    type: text
    max: 40
    width: 1/2
  actionbar_button:
    label: Action bar button
    type: text
    max: 20
    width: 1/2
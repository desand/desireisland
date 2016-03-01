<style lang="stylus">
ul:after, header:after, #main:after
  clear both
  content ""
  display table

ul:before, header:before, #main:before
  content ""
  display table

ul
  list-style none
  padding 0
  margin 0

#main
  padding 2.5em 7%
  .efx-info
    width 49%
    float left
    padding 2em 1em
    font-weight 700
    border-radius .2em
    h1
      line-height 1
      display inline-block
      padding .1em .2em
      font-size 5em
      margin 0
      background #e3e3e3
    p
      margin 0
  #efx-name
    color #16A085
    font-weight 900
    border-bottom 4px solid #f5f5f5
  #efx-ease
    color #34495E
  .menu-chks
    position relative
    line-height 1
    font-size .9em
    width 45%
    float right
    input
      margin-right .5em
      &:checked
        & + span
          color #16A085
          &:before
            content "\f046"
    span
      -webkit-transition all 0.2s ease
      -moz-transition all 0.2s ease
      transition all 0.2s ease
      &:before
        font-family 'FontAwesome'
        position absolute
        left 12px
        top 10px
        color #3b536b
        content "\f096"
        font-size 1.4em
    label
      color #e8e8e8
      font-weight 600
      display inline-block
      position relative
      margin .25em
      background #2d3f51
      padding .8em 1.2em .8em 2.5em
      border-radius .4em
      &:hover
        cursor pointer

nav
  li
    position relative
    display inline-block
    float left
    padding 0
    display block
    z-index 599
  a
    position relative
    z-index 599
    color #f5f5f5
    background #2d3f51
    text-decoration none
    display block
    padding 1.5em
    font-weight 600
    text-transform uppercase
    letter-spacing 1px
    -webkit-transition all 0.2s ease
    -moz-transition all 0.2s ease
    transition all 0.2s ease
    i[class*="caret"]
      color #3b536b
      margin-left .15em
    &:hover
      color #16A085
      & + .submenu
        opacity 1
        -webkit-transform rotateX(0deg)
        -moz-transform rotateX(0deg)
        -ms-transform rotateX(0deg)
        -o-transform rotateX(0deg)
        transform rotateX(0deg)
        visibility visible
  .eiob
    .submenu
      -webkit-transition all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55), opacity 0.2s linear
      -moz-transition all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55), opacity 0.2s linear
      transition all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55), opacity 0.2s linear
  .ln
    .submenu
      -webkit-transition all 0.3s linear
      -moz-transition all 0.3s linear
      transition all 0.3s linear
  .ei
    .submenu
      -webkit-transition all 0.3s ease-in, opacity 0.2s linear
      -moz-transition all 0.3s ease-in, opacity 0.2s linear
      transition all 0.3s ease-in, opacity 0.2s linear
  .eo
    .submenu
      -webkit-transition all 0.3s ease-out, opacity 0.2s linear
      -moz-transition all 0.3s ease-out, opacity 0.2s linear
      transition all 0.3s ease-out, opacity 0.2s linear
  .submenu
    display block
    opacity 0
    position absolute
    visibility hidden
    z-index 499
    width 100%
    top 100%
    left 0
    background rgba(255, 255, 255, 0.8)
    box-shadow 0 2px 5px rgba(68, 68, 68, 0.3)
    -webkit-transform-origin top center
    -moz-transform-origin top center
    -ms-transform-origin top center
    -o-transform-origin top center
    transform-origin top center
    -webkit-transform rotateX(-90deg)
    -moz-transform rotateX(-90deg)
    -ms-transform rotateX(-90deg)
    -o-transform rotateX(-90deg)
    transform rotateX(-90deg)
    -webkit-transition all 0.25s ease
    -moz-transition all 0.25s ease
    transition all 0.25s ease
    li
      float none
      display block
      padding 0 8px
      margin 0
      background #fff
      & > .submenu
        top 0
        left 100%
    &:hover
      opacity 1
      -webkit-transform rotateX(0deg)
      -moz-transform rotateX(0deg)
      -ms-transform rotateX(0deg)
      -o-transform rotateX(0deg)
      transform rotateX(0deg)
      visibility visible
    a
      width 100%
      display block
      font-weight 300
      padding 1.5em 0
      margin 0 0 5px
      border-bottom 1px solid #ccc
      &:hover
        color #000
        background none
        border-bottom 1px solid #000
  &.rx
    li
      &:hover
        & + .submenu
          opacity 1
          -webkit-transform rotateY(0deg)
          -moz-transform rotateY(0deg)
          -ms-transform rotateY(0deg)
          -o-transform rotateY(0deg)
          transform rotateY(0deg)
    .submenu
      -webkit-transform rotateY(-90deg)
      -moz-transform rotateY(-90deg)
      -ms-transform rotateY(-90deg)
      -o-transform rotateY(-90deg)
      transform rotateY(-90deg)
      &:hover
        -webkit-transform rotateY(0deg)
        -moz-transform rotateY(0deg)
        -ms-transform rotateY(0deg)
        -o-transform rotateY(0deg)
        transform rotateY(0deg)
  &.fd
    li
      &:hover
        & + .submenu
          opacity 1
          -webkit-transform translateY(0px)
          -moz-transform translateY(0px)
          -ms-transform translateY(0px)
          -o-transform translateY(0px)
          transform translateY(0px)
    .submenu
      -webkit-transform-origin center center
      -moz-transform-origin center center
      -ms-transform-origin center center
      -o-transform-origin center center
      transform-origin center center
      -webkit-transform translateY(-50px)
      -moz-transform translateY(-50px)
      -ms-transform translateY(-50px)
      -o-transform translateY(-50px)
      transform translateY(-50px)
      &:hover
        -webkit-transform translateY(0px)
        -moz-transform translateY(0px)
        -ms-transform translateY(0px)
        -o-transform translateY(0px)
        transform translateY(0px)
  &.fu
    li
      &:hover
        & + .submenu
          opacity 1
          -webkit-transform translateY(0px)
          -moz-transform translateY(0px)
          -ms-transform translateY(0px)
          -o-transform translateY(0px)
          transform translateY(0px)
    .submenu
      -webkit-transform-origin center center
      -moz-transform-origin center center
      -ms-transform-origin center center
      -o-transform-origin center center
      transform-origin center center
      -webkit-transform translateY(20px)
      -moz-transform translateY(20px)
      -ms-transform translateY(20px)
      -o-transform translateY(20px)
      transform translateY(20px)
      &:hover
        -webkit-transform translateY(0px)
        -moz-transform translateY(0px)
        -ms-transform translateY(0px)
        -o-transform translateY(0px)
        transform translateY(0px)
  &.sc
    li
      &:hover
        & + .submenu
          opacity 1
          -webkit-transform rotateY(0deg) scale(1)
          -moz-transform rotateY(0deg) scale(1)
          -ms-transform rotateY(0deg) scale(1)
          -o-transform rotateY(0deg) scale(1)
          transform rotateY(0deg) scale(1)
    .submenu
      -webkit-transform-origin center top
      -moz-transform-origin center top
      -ms-transform-origin center top
      -o-transform-origin center top
      transform-origin center top
      -webkit-transform scale(0)
      -moz-transform scale(0)
      -ms-transform scale(0)
      -o-transform scale(0)
      transform scale(0)
      &:hover
        -webkit-transform rotateY(0deg) scale(1)
        -moz-transform rotateY(0deg) scale(1)
        -ms-transform rotateY(0deg) scale(1)
        -o-transform rotateY(0deg) scale(1)
        transform rotateY(0deg) scale(1)
  &.rt
    li
      &:hover
        & + .submenu
          -webkit-transform rotate(0deg)
          -moz-transform rotate(0deg)
          -ms-transform rotate(0deg)
          -o-transform rotate(0deg)
          transform rotate(0deg)
    .submenu
      -webkit-transform-origin center center
      -moz-transform-origin center center
      -ms-transform-origin center center
      -o-transform-origin center center
      transform-origin center center
      -webkit-transform rotate(180deg)
      -moz-transform rotate(180deg)
      -ms-transform rotate(180deg)
      -o-transform rotate(180deg)
      transform rotate(180deg)
      &:hover
        -webkit-transform rotate(0deg)
        -moz-transform rotate(0deg)
        -ms-transform rotate(0deg)
        -o-transform rotate(0deg)
        transform rotate(0deg)
        -webkit-transform scale(1)
        -moz-transform scale(1)
        -ms-transform scale(1)
        -o-transform scale(1)
        transform scale(1)
  &.mv
    li
      &:hover
        & + .submenu
          -webkit-transform translateX(0px) skewX(0deg)
          -moz-transform translateX(0px) skewX(0deg)
          -ms-transform translateX(0px) skewX(0deg)
          -o-transform translateX(0px) skewX(0deg)
          transform translateX(0px) skewX(0deg)
    .submenu
      -webkit-transform-origin center center
      -moz-transform-origin center center
      -ms-transform-origin center center
      -o-transform-origin center center
      transform-origin center center
      -webkit-transform translateX(-40px) skewX(-7deg)
      -moz-transform translateX(-40px) skewX(-7deg)
      -ms-transform translateX(-40px) skewX(-7deg)
      -o-transform translateX(-40px) skewX(-7deg)
      transform translateX(-40px) skewX(-7deg)
      &:hover
        -webkit-transform skewX(0deg)
        -moz-transform skewX(0deg)
        -ms-transform skewX(0deg)
        -o-transform skewX(0deg)
        transform skewX(0deg)
  &.dc
    li
      &:hover
        & + .submenu
          -webkit-transform rotateY(0deg)
          -moz-transform rotateY(0deg)
          -ms-transform rotateY(0deg)
          -o-transform rotateY(0deg)
          transform rotateY(0deg)
    .submenu
      -webkit-transform-origin left top
      -moz-transform-origin left top
      -ms-transform-origin left top
      -o-transform-origin left top
      transform-origin left top
      -webkit-transform rotateY(-90deg)
      -moz-transform rotateY(-90deg)
      -ms-transform rotateY(-90deg)
      -o-transform rotateY(-90deg)
      transform rotateY(-90deg)
      &:hover
        -webkit-transform rotateY(0deg)
        -moz-transform rotateY(0deg)
        -ms-transform rotateY(0deg)
        -o-transform rotateY(0deg)
        transform rotateY(0deg)
</style>

<template>
	<nav id="nav" class="ry">
	  <ul id="main-menu">
	    <slot></slot>
	  </ul>
	</nav>  
</template>

<script>
	export default {
		ready() {
			radioChange( $('input[name="efx"]'), $('#nav'), $('#efx-name') );
			radioChange( $('input[name="ease"]'), $('#main-menu'), $('#efx-ease'));

			function radioChange(inputs, addClassTo, appendTo) {
			  inputs.hide();
			  inputs.on( 'change', function() { 
			    inputs.each( function() {
			      if ( $(this).is(':checked') ) {
			        addClassTo.attr('class', $(this).val() );
			        var radioName = $(this).next('span').text(); 
			        appendTo.text(radioName);
			      }
			  
			    });
			  }); 
			}
		}
	}
</script>
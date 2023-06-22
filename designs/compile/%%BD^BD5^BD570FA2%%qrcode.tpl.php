<?php /* Smarty version 2.6.26, created on 2023-04-29 22:43:59
         compiled from qrcode.tpl */ ?>
<div id="generator">
    <form target="qrcode-frame" action="" method="post">
      <fieldset>
        <legend>Size:</legend>
         <input type="radio" name="size" value="150x150" checked>150x150<br>
         <input type="radio" name="size" value="200x200">200x200<br>
         <input type="radio" name="size" value="250x250">250x250<br>
         <input type="radio" name="size" value="300x300">300x300<br>
      </fieldset>
      <fieldset>
        <legend>Encoding:</legend>
        <input type="radio" name="encoding" value="UTF-8" checked>UTF-8<br>
        <input type="radio" name="encoding" value="Shift_JIS">Shift_JIS<br>
        <input type="radio" name="encoding" value="ISO-8859-1">ISO-8859-1<br>
      </fieldset>
      <fieldset>
        <legend>Content:</legend>
        <textarea name="content"></textarea>        
      </fieldset>         
      <fieldset>
        <legend>Error correction:</legend>
        <select name="correction">
            <option value="L" selected>L</option>
            <option value="M">M</option>
            <option value="Q">Q</option>
            <option value="H">H</option>
        </select>
      </fieldset>         
      <input type="submit" value="Generate"></input>
    </form>
</div>  
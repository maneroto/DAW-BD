<style>
  .current-values {
    color: #666;
    font-size: 12px;
  }
</style>
<div id="spherical-video-player"></div>

<!-- Display spherical property values and enable user to update them. -->
<table style="border: 0; width: 640px;">
  <tr style="background: #fff;">
    <td>
      <label for="yaw-property">yaw: </label>
      <input type="text" id="yaw-property" style="width: 80px"><br>
      <div id="yaw-current-value" class="current-values"> </div>
    </td>
    <td>
      <label for="pitch-property">pitch: </label>
      <input type="text" id="pitch-property" style="width: 80px"><br>
      <div id="pitch-current-value" class="current-values"> </div>
    </td>
    <td>
      <label for="roll-property">roll: </label>
      <input type="text" id="roll-property" style="width: 80px"><br>
      <div id="roll-current-value" class="current-values"> </div>
    </td>
    <td>
      <label for="fov-property">fov: </label>
      <input type="text" id="fov-property" style="width: 80px"><br>
      <div id="fov-current-value" class="current-values"> </div>
    </td>
    <td style="vertical-align: bottom;">
      <button id="spherical-properties-button">Update properties</button>
    </td>
  </tr>
</table>
<?php $js.='<script type="text/javascript" src = "'.$httpProtocol.$host.$url.'js/initAPI.js"></script>';?>
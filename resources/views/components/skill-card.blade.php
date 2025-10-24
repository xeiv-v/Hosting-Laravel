@php
  switch($level) {
      case 'Expert': $width = '100%'; break;
      case 'Advanced': $width = '85%'; break;
      case 'Intermediate': $width = '85%'; break;
      case 'Basic': $width = '40%'; break;
      default: $width = '50%'; break;
  }
@endphp

<div class="skill-card">
  <div class="skill-name">{{ $skill }}</div>
  <div class="skill-level">
    <div class="level-bar">
      <div class="level-fill" style="width: '{{ $width }}';"></div>
    </div>
    <span class="level-text">{{ $level }}</span>
  </div>
</div>

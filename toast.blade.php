<div class="custom-toastr toast-{{ $type }}" 
     style="position: fixed; {{ $options['position'] === 'top-right' ? 'top: 20px; right: 20px;' : '' }}">
    <div class="toast-body">
        @if($options['closeButton'])
            <button onclick="this.parentElement.style.display='none'" class="close">&times;</button>
        @endif
        {{ $message }}
        @if($options['progressBar'])
            <div class="progress-bar" style="height: 3px; background: #ccc; animation: progress {{ $options['timeout'] }}ms linear forwards;"></div>
        @endif
    </div>
</div>

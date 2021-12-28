<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <button class="btn btn-sm {{ $isLiked ? 'btn-primary' : 'btn-white' }}" wire:click="userLike">Like</button>
    {{ $totalLike }}
</div>

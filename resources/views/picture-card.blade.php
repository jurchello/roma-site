<div class="card">
    <div class="card-body">
        <img id="img1" src="{{ asset('img/pictures/' . $id . '.jpg') }}" onclick="enlargeImg()" class="card-img-top">
    </div>
    <div class="card-footer">
        <p class="card-text">{{$cardName ?? ""}}</p>
    </div>
</div>
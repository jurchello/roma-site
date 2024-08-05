<div class="card">
    <div class="card-body position-relative">
        <span class="badge bg-success position-absolute" style="top: 10px; left: 10px; opacity: 50%;">{{$size ?? ""}}</span>
        <img id="img1" src="{{ asset('img/pictures/' . $id . '.jpg') }}" onclick="enlargeImg()" class="card-img-top">
    </div>
    <div class="card-footer">
        <p class="card-text">{{$pictureName ?? ""}}</p>
    </div>
</div>
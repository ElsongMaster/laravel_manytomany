@extends('template.main')
<h1 class="text-center fs-2">Bienvenue sur ma page home</h1>


@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center vh-100">

    <div class="col-lg-6 mt-4 mt-md-0">
        <p class=" fs-3 text-center">Laisse un commentaire</p>
      <form action="{{route('posts.store')}}" method="post" role="form" class="php-email-form">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="nom" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
            <label for="tag_id">Tags</label>
            <select name="tag_id" id="tag_id">
                @foreach ($tags as $tag )
                <option value="{{$tag->id}}">{{$tag->nom}}</option>
                @endforeach
            </select>
          {{-- <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required> --}}
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="commentaire" rows="5" placeholder="commentaire" required></textarea>
        </div>
       
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
    </div>
</div>


    
@endsection
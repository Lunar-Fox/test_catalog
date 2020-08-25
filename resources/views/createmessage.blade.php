@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
        <h4 class="text-center mb-5">Guestbook</h4>
            <form method="POST" action="/guestmessage">
                        @csrf

                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}" required autocomplete="author" autofocus>

                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="messagetext" class="col-md-4 col-form-label text-md-right">Message</label>

                            <div class="col-md-6">
                                <textarea id="messagetext" type="messagetext" class="form-control @error('messagetext') is-invalid @enderror" name="messagetext" value="{{ old('messagetext') }}" required autocomplete="messagetext" row="40"></textarea>

                                @error('messagetext')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection

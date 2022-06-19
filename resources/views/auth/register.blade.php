<x-app-layout title="Register"> 
  <div class="columns mt-4">
    <div class="column is-one-third m-auto">
      <div class="box">

        @if(session()->has('error'))
          <p class="has-text-danger">{{session() -> get('error')}}</p>
        @endif
        
        <form action="{{route('register.store')}}" method="POST">
          @csrf 
          <div class="field">
            <label class="label" for="name">Name</label>
            <div class="control">
              <input class="input" type="text" placeholder="Enter your fullname" id="name" name="name" value="{{old('name')}}">
            </div>
            @error('name')
            <p class="help is-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
              <input class="input" type="text" placeholder="Enter your email" id="email" name="email" value="{{old('email')}}">
            </div>
            @error('email')
            <p class="help is-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
              <input class="input" type="password" placeholder="Enter your password" id="password" name="password">
            </div>
            @error('password')
            <p class="help is-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="field">
            <button class="button is-dark" type="submit">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
<x-app-layout title="Login"> 
  <div class="columns mt-4">
    <div class="column is-one-third m-auto">
      <div class="box">

        @if(session()->has('error'))
          <p class="has-text-danger">{{session() -> get('error')}}</p>
        @endif
        
        <form action="{{route('login.store')}}" method="POST">
          @csrf 
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
            <button class="button is-dark" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
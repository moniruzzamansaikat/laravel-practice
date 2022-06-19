<x-app-layout title="Add Todo"> 
  <div class="columns mt-4">
    <div class="column is-one-third m-auto">
      <div class="box">
        <form action="{{route('todos.store')}}" method="POST">
          @csrf 
          <div class="field">
            <label class="label" for="todo_text">Todo Text</label>
            <div class="control">
              <input class="input" type="text" placeholder="Todo Text" id="todo_text" name="text" value="{{old('text')}}">
            </div>
            @error('text')
            <p class="help is-danger">Todo text is required !</p>
            @enderror
          </div>
          <div class="field">
            <div>
              <label class="label">Completed todo ?</label>
            </div>
            <div class="field-body">
              <div class="field">
                <div class="control">
                  <label class="radio">
                    <input type="radio" name="done">
                    Yes
                  </label>
                  <label class="radio">
                    <input type="radio" name="done">
                    No
                  </label>
                </div>
                @error('done')
                  <p class="help is-danger">Please select an option !</p>
                @enderror
              </div>
            </div>
          </div>
          <div class="field">
            <button class="button is-dark">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
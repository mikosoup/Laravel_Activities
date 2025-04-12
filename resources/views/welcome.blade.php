@extends('base')
@section('title', 'i cooked')
<div>

  {{-- @if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif --}}
  @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" id="success">
         {{ Session::get('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     @endif
  
  
  <a href="{{ route('auth.logout')}}" class="btn btn-danger" style="float: right;">Logout</a>

    {{-- mao ni ang table na mo show sa mga list of students --}}
    <table >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>   
                <th scope="col"></th>          
            </tr>
        </thead>
        <tbody>
            @foreach($students as $std)
            <tr>
                <th>{{ $std -> id }}</th>
                <td>{{ $std -> name }} </td>
                <td>{{ $std -> age }}</td>
                <td>{{ $std -> gender }}</td>
                <td>{{ $std -> address }}</td>
                <td>
                  {{-- <form method="POST" action="/delete-post/{{$std->id}}">
                  @csrf
                  @method('DELETE')
                  <button>delete</button> --}}
                  <form action="{{ route('student.destroy', $std->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button id="butt" type="submit" class="btn btn-danger">Delete</button>
                </form>
                </form> 
                <p><a href="{{ route('students.edit', $std->id) }}"><button id="but" >update</button></a></p>
              </td>                
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- mao ni ang form for adding students --}}
    <form id="for" method="POST" action="{{ route('std.createNew') }}">
        @csrf
        <h2>add students</h2>
        <div>
          <label>name</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}">
          @error('name')
          <span class="text-danger">{{ $message }}</span>
          @enderror          
        </div>
        <div>
          <label>age</label>
          <input type="number" id="age" name="age" value="{{ old('age') }}">
          @error('age')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div>
            <label>gender</label>
            <input type="text" id="gender" name="gender" value="{{ old('gender') }}">
            @error('gender')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label>address</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}">
            @error('address')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        <button id="button" type="submit">Submit</button>
      </form>    
</div>
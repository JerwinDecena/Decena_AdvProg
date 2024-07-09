<h1>Users Edit Page</h1>
<p>This is edit page with id {{ $id }}</p>



<div>
    <div>
    <form action=  "{{ url('Users', $id) }}" method="POST">
        @csrf
        @method ( 'PUT') 
    
        <div class="form-group">
            <label for="fullname" class="form-label">Fullname</label>
            <input type="text" class='form-control"/>

    </div>
    <div>
        <button>Submit</button>
    </form>

<div>
    <div>
    
        



    
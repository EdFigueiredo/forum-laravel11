<h1>Teste</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('questions.store') }}" method="POST">
    @csrf
    <input type="text" name="subject"><br>
    <textarea name="text" id="" cols="30" rows="10"></textarea><br>
    <select name="category_id" id="">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select><br>
    <button type="submit">Enviar</button>

</form>
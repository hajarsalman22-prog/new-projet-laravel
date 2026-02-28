<div class="mb-3">

    <label for="title">title : </label>
    <input value="{{old('title' , $stagiare->title ?? '') }}" name="title" type="text" class="form-control @error('title') is-invalid @enderror" >
    @error('title')

        <p class="text-danger"> {{$message}} </p>
    @enderror
</div>

<div class="mb-3">

    <label for="title">price : </label>
    <input value="{{old('price' ,$stagiare->price ?? '')}}"  name="price" type="number" class="form-control @error('price') is-invalid @enderror" >
    @error('price')

        <p class="text-danger"> {{$message}} </p>
    @enderror
</div>

<div class="mb-3">

    <label for="title">QT : </label>
    <input name="qt" value="{{old('qt' ,$stagiare->qt ?? '')}}"  type="number" class="form-control @error('qt') is-invalid @enderror"  >
    @error('qt')

        <p class="text-danger"> {{$message}} </p>
    @enderror
</div>

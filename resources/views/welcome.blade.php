<div style="direction: rtl">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<form action="{{route('store')}}" style="display: flex;justify-content: space-between;width: 90%;margin: 1rem auto">
    @csrf

    <div> <label for="">تاریخ :</label>
    <input type="text">
   </div>
    <div>
    <input type="search">
    <button>جستجو</button>
    </div>
</form>
<table class="table table-striped table-dark" style="direction: rtl; ">
    <thead>
    <tr>
        <th scope="col">شماره</th>
        <th scope="col">نام دوره</th>
        <th scope="col">توضیحات کوتاه</th>
        <th scope="col">توضیحات</th>
        <th scope="col">price</th>
        <th scope="col">تاریخ</th>
    </tr>
    </thead>
    <tbody>
    @foreach($curse as $curses)
    <tr>
        <th scope="row">{{$curses->id}}</th>
        <td>{{$curses->title}}</td>
        <td>{{$curses->detail}}</td>
        <td>{{$curses->description}}</td>
        <td>{{$curses->price}}</td>
        <td>{{$curses->created_at}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>

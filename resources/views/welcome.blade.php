<form method="post" action="/">
  @csrf
  <input type="number" id="value" name="value" min="2" required>
  <button type="submit" name="submit">Submit</button>
</form>

Note: a^2 + b^2 = c^ Value: {{$id}}
<table border="1">
  <tr>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>AVG</th>
  </tr>
  @foreach($pt as $p)
    <tr>
      <td>{{$p->a}}</td>
      <td>{{$p->b}}</td>
      <td>{{$p->c}}</td>
      <td>{{$p->avg}}</td>
    </tr>
  @endforeach
</table>

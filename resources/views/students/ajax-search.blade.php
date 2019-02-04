<table id='customers' class="table table-stripped" style="font-size:13px;">   
@if(count($customers) > 0)
  @foreach($customers as $key => $customer)
    <tr>
        <th>#</th>
        <th>Cusomter No.</th>
        <th>Surname</th>
        <th>Full Names</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Physical Address</th>
        <th>Balance (SZL)</th>
        <th>Status</th>
        <th>Actions / Options</th>
        
    </tr>
  <tr id="customer-data">
        <td>{{$key + 1}}</td>
        <td>{{$customer->barcode}}</td>
        <td>{{$customer->last_name}}</td>
        <td><a href="/customers/{{$customer->id}}">{{$customer->middle_name}} {{$customer->first_name}}</a></td>
        <td>{{$customer->mobile}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->gender}}</td>
        <td>{{$customer->physical_address}}</td>

        @if($customer->balance > 50)
            <td style="font-weight: bold;color:green;">E {{$customer->balance}}</td>
        @else
            <td style="font-weight: bold;color:red;">E {{$customer->balance}}</td>
        @endif

        <td>
            <p role="button"  class="btn btn-sm {{\App\Status::translateStatus($customer->status_id)[2]}} active" >
                {{\App\Status::translateStatus($customer->status_id)[1]}}
            </p>
        </td>
        <td>
            <a href="/customers/{{$customer->id}}"><img src="/storage/actions/settings.png" height="20" width="20"></a>
            Account Settings
        </td>
    </tr>
  @endforeach

@else
<tr id="customer-data">
    <td> <p> Sorry, No data match this Customer Number!</p>
</tr>
@endif
</table>
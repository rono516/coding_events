
@include('layouts.inc.topnav')

<section class="bg-light p-5">
  <div class="header_fixed table-responsive" id="no-more-tables">
    <table class="table bg-white">
     <thead class="bg-dark text-light">
        <th>Contest Name</th>
        <th>Contest Link</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Duration</th>
        <th>Contest Type</th>
        <th>In 24hrs?</th>
        <th>Coding Status</th>

       </thead>
       <tbody>
         @foreach ($hackerearth as $event)

           <tr>
              <td data-title="Contest Name" style="width: 250px;">{{ $event->name }}</td>
              <td data-title="Contest Link" style="width: 200px;"> <a href="{{ $event->url }}">{{ $event->url }}</a></td>
              <td data-title="Start Time">{{ date("d/M/Y H:i:s", strtotime($event->start_time)) }}</td>
              <td data-title="End Time">{{ date("d/M/Y H:i:s", strtotime($event->end_time)) }}</td>
              <td data-title="Duration">{{ gmdate("H:i:s", ($event->duration))  }}</td>
              <td data-title="Site">{{ $event->type_ }}</td>
              <td data-title="In 24hrs?">{{ $event->in_24_hours }}</td>
              <td data-title="Coding Status">{{ $event->status }}</td>
            </tr>
            
           @endforeach

         </tbody>
      </table>

   </div>
</section>
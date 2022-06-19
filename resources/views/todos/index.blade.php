<x-app-layout title="Todos">
@include('partials.notifications')

<div class="card p-4 my-5">
  <table class="table is-striped" style="width: 100%;" id="data_table_todos">
    <thead>
      <tr>
        <th>Text</th>
        <th>Completed</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
</div>

</x-app-layout>
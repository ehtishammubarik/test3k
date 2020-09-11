<script id='load_data' type='text/x-tmpl'>

{% for (var x=0; x<count(o); x++) { %}

<tr class="rowid_{%=o[x].id%}">
    <td>{%=o[x].server_id%}</td>
    <td>07-04-2020</td>
    <td>1</td>
    <td>
        <a class="edit pointer" title="Edit" data-id="{%#o[x].id%}"><i class="material-icons dp48">mode_edit</i></a>
        <a class="delete pointer" title="Delete" data-id="{%#o[x].id%}"><i class="material-icons pink-text">clear</i></a>
    </td>
</tr>
{% } %}

</script>

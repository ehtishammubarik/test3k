<script id='load_rows' type='text/x-tmpl'>
{%
    let obj = o.data;
    for (var x=0; x<count(obj); x++) { %}

<tr class="rowid_{%=obj[x].id%}">
    <td>{%#obj[x].application_id%}</td>
    <td>{%#obj[x].name%}</td>
    <td>{%# text_truncate(obj[x].description,25) %}</td>
    <td>
        <i class="material-icons pointer color-blue edit" data-id="{%=obj[x].id%}"
        title="Edit">create</i>
        <i class="material-icons pointer color-red delete"
        data-id="{%=obj[x].id%}" title="Delete">delete_sweep</i>
    </td>
</tr>

{% } %}


</script>


<script id='category_rows2' type='text/x-tmpl'>
{%
    let obj = o.data;
    for (var x=0; x<count(obj); x++) { %}

<tr class="rowid_{%=obj[x].id%}">
    <td>
        <input type="checkbox" class="select_category"
        name="select_category[]" value="{%=obj[x].id%}">
    </td>
    <td>
        <img src="{{url('/public/image/placeholder.png')}}" width="40"
        height="40" alt="Image">
    </td>
    <td>{%#obj[x].name%}</td>
    <td>{%#obj[x].slug%}</td>
    <td>{%# text_truncate(obj[x].description,25) %}</td>
    <td>
        <i class="material-icons pointer color-blue edit" data-id="{%=obj[x].id%}"
        title="Edit">create</i>
        <i class="material-icons pointer color-red delete"
        data-id="{%=obj[x].id%}" title="Delete">delete_sweep</i>
    </td>
</tr>

{% } %}

</script>


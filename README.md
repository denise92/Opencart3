I would like to add a variable/display in common/header twig file, which can be managed from an new extension. The new extension is created. starter_module

I added in: admin/view/template/extension/module/starter_module.twig


```
<div class="form-group">
        <label class="col-sm-2 control-label" for="input-new">New</label>
        <div class="col-sm-10">
        <select name="new" id="input-new" class="form-control">
            {% if new %}
            <option value="1" selected="selected">Enabled</option>
            <option value="0">Disabled</option>
            {% else %}
            <option value="1">Enabled</option>
            <option value="0" selected="selected">Disabled</option>
            {% endif %}
        </select>
        </div>
</div>
```

in admin/controller/extension/module/starter_module.php

```
if (isset($this->request->post['new'])) {
  $data['new'] = $this->request->post['new'];
} elseif (!empty($module_info)) {
  $data['new'] = $module_info['new'];
} else {
  $data['new'] = '';
}
```

in catalog/controller/extension/module/starter_module.php

```
            $data['new'] = $this->config->get('new');

            $data['new'] = (int) $setting['new'];  
```

in catalog/view/theme/default/template/common/header.twig

```
{% if new %}Enabled {% else %} disabled{% endif %}
```

But always I got the result only disabled, what is missing? cannot be sent variable from extension to common header?

Please, help me if you know the issue.

You can see here one of my working variable which was set in setting/setting files and is working.

https://github.com/bblori/Enable-Style-OC3

Many thanks
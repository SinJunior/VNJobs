# Organization endpoints


## List Organization
Display a listing of the Organization.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/organizations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/organizations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

{
"current_page": 1,
data: [{
  "id": 1,
  "owner_id": 1,
  "org_name": "Công ty Vi Inc",
  "phones": "+84-165-015-8016",
  "description": "string",
  "tax_id": "41665",
  "address": "string",
  "is_verify": 0,
  "logo_path": "string",
  "cover_path": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
 {
  "id": 2,
  "owner_id": 1,
  "org_name": "Công ty Vi Inc",
  "phones": "+84-165-015-8016",
  "description": "string",
  "tax_id": "41665",
  "address": "string",
  "is_verify": 0,
  "logo_path": "string",
  "cover_path": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
],
,
  "first_page_url": "http://127.0.0.1:8000/api/v1/organizations?page=1",
  "from": 1,
  "last_page": 1,
  "last_page_url": "http://127.0.0.1:8000/api/v1/organizations?page=1",
  "next_page_url": null,
  "path": "http://127.0.0.1:8000/api/v1/organizations",
  "per_page": 10,
  "prev_page_url": null,
  "to": 10,
  "total": 2
}
```
<div id="execution-results-GETapi-v1-organizations" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organizations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organizations"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organizations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organizations"></code></pre>
</div>
<form id="form-GETapi-v1-organizations" data-method="GET" data-path="api/v1/organizations" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organizations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organizations" onclick="tryItOut('GETapi-v1-organizations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organizations" onclick="cancelTryOut('GETapi-v1-organizations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organizations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organizations</code></b>
</p>
</form>


## Find an Organization
Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/organizations/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"aliquid"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/organizations/sunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "aliquid"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-GETapi-v1-organizations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organizations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organizations--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organizations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organizations--id-"></code></pre>
</div>
<form id="form-GETapi-v1-organizations--id-" data-method="GET" data-path="api/v1/organizations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organizations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organizations--id-" onclick="tryItOut('GETapi-v1-organizations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organizations--id-" onclick="cancelTryOut('GETapi-v1-organizations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organizations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organizations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-organizations--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
The id of the organization.</p>

</form>


## Create Organization
Store a newly created resource in Database.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/organizations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"owner_id":3,"org_name":"earum","phones":"mollitia","description":"quia","tax_id":15,"address":"enim","logo_path":"ex","cover_path":"fugit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/organizations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "owner_id": 3,
    "org_name": "earum",
    "phones": "mollitia",
    "description": "quia",
    "tax_id": 15,
    "address": "enim",
    "logo_path": "ex",
    "cover_path": "fugit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-POSTapi-v1-organizations" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-organizations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-organizations"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-organizations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-organizations"></code></pre>
</div>
<form id="form-POSTapi-v1-organizations" data-method="POST" data-path="api/v1/organizations" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-organizations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-organizations" onclick="tryItOut('POSTapi-v1-organizations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-organizations" onclick="cancelTryOut('POSTapi-v1-organizations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-organizations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/organizations</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>owner_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="owner_id" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>org_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="org_name" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>phones</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phones" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tax_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tax_id" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-v1-organizations" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>logo_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="logo_path" data-endpoint="POSTapi-v1-organizations" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>cover_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cover_path" data-endpoint="POSTapi-v1-organizations" data-component="body"  hidden>
<br>
</p>

</form>


## Update an Organization
Update the specified resource in Database.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/organizations/architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"owner_id":13,"org_name":"ex","phones":"et","description":"aut","tax_id":12,"address":"quasi","logo_path":"nobis","cover_path":"sed"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/organizations/architecto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "owner_id": 13,
    "org_name": "ex",
    "phones": "et",
    "description": "aut",
    "tax_id": 12,
    "address": "quasi",
    "logo_path": "nobis",
    "cover_path": "sed"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-PUTapi-v1-organizations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-organizations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-organizations--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-organizations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-organizations--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-organizations--id-" data-method="PUT" data-path="api/v1/organizations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-organizations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-organizations--id-" onclick="tryItOut('PUTapi-v1-organizations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-organizations--id-" onclick="cancelTryOut('PUTapi-v1-organizations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-organizations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/organizations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-organizations--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>owner_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="owner_id" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>org_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="org_name" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>phones</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phones" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tax_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tax_id" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="PUTapi-v1-organizations--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>logo_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="logo_path" data-endpoint="PUTapi-v1-organizations--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>cover_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cover_path" data-endpoint="PUTapi-v1-organizations--id-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove an Organization
Remove the Organization from Database.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/organizations/officiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"expedita"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/organizations/officiis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "expedita"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-DELETEapi-v1-organizations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-organizations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-organizations--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-organizations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-organizations--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-organizations--id-" data-method="DELETE" data-path="api/v1/organizations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-organizations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-organizations--id-" onclick="tryItOut('DELETEapi-v1-organizations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-organizations--id-" onclick="cancelTryOut('DELETEapi-v1-organizations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-organizations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/organizations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-organizations--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="DELETEapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
The id of the organization.</p>

</form>




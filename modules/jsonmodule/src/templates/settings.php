{% import "_includes/forms" as forms %}
<p>All settings are required!</p>

{{ forms.textField({
  label: "Facebook App Id",
  name: "facebookAppId",
  required: "true",
  value: settings.facebookAppId
}) }}

{{ forms.textField({
  label: "Facebook Secret",
  name: "facebookSecret",
  required: "true",
  value: settings.facebookSecret
}) }}

{{ forms.textField({
  label: "Facebook Page Name",
  name: "facebookPage",
  required: "true",
  value: settings.facebookPage
}) }}
<?php

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\CoreExtension;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* subscribers/importExport/import.html */
class __TwigTemplate_71b036b7f22592892987288406b287adc5134f8454b897deb37074c64d784d1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["csvDescription"] = $this->extensions['MailPoet\Twig\I18n']->translate("This file needs to be formatted in a CSV style (comma-separated-values). Look at some [link]examples on our support site[/link].");
        // line 2
        $this->parent = $this->loadTemplate("layout.html", "subscribers/importExport/import.html", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<div id=\"mailpoet_subscribers_import\" class=\"wrap\">
  <div class=\"mailpoet-top-bar\">
    <a href=\"?page=mailpoet-subscribers#/\" role=\"button\" class=\"mailpoet-top-bar-logo\" title=\"Back to section root\" tabindex=\"0\">
      <div class=\"mailpoet-top-bar-logo-desktop\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 80 24\">
          <path fill=\"#FF5301\" d=\"M.781 17.716c.418-.332 1.014-.313 1.41.045.522.438 1.18.682 1.86.69h31.622c1.48 0 2.898.589 3.945 1.635l.165.165.165-.165c1.045-1.049 2.465-1.637 3.945-1.635h30.975c.681-.008 1.339-.252 1.86-.69.398-.351.99-.37 1.41-.045l.36.285c.248.206.404.503.434.825.01.323-.122.636-.36.855-1.016.908-2.328 1.415-3.69 1.425H43.875c-1.323-.001-2.484.883-2.835 2.16v.03c-.015.105-.165.66-1.275.66-1.11 0-1.26-.555-1.275-.66v-.03c-.35-1.277-1.511-2.161-2.835-2.16H4.051c-1.362-.01-2.674-.517-3.69-1.425-.243-.216-.376-.53-.36-.855.014-.324.168-.625.422-.825zm52.335-14.07c.708-.006 1.41.121 2.07.375.597.23 1.139.582 1.59 1.035.46.463.813 1.02 1.035 1.635.247.677.37 1.394.36 2.115.01.735-.111 1.467-.36 2.16-.221.622-.574 1.19-1.035 1.665-.46.457-1.005.819-1.605 1.065-.66.252-1.362.379-2.07.375-.721.005-1.438-.122-2.113-.375-.604-.239-1.15-.602-1.605-1.065-.438-.476-.788-1.024-1.037-1.62-.234-.691-.35-1.416-.345-2.145-.005-.732.122-1.459.375-2.145.227-.62.585-1.183 1.05-1.65.462-.458 1.014-.816 1.62-1.05.66-.26 1.362-.387 2.07-.375zM71.373.96c.345 0 .615.09.765.27.128.154.205.342.222.54l.003.12v2.04h1.41c.257-.026.504.104.63.33.11.218.167.46.165.705 0 .857-.383 1.082-.74 1.107l-.07.003h-1.395v4.86c0 .255.045.435.135.525.108.102.256.152.405.135.118.006.236-.015.345-.06l.155-.065.16-.055.285-.135c.121-.06.255-.091.39-.09.327-.022.637.148.795.435.15.26.227.555.225.855.007.2-.029.4-.105.585-.084.189-.226.347-.405.45-.24.147-.5.262-.77.339l-.205.05-.273.059c-.364.068-.736.1-1.107.092-.842 0-1.547-.225-2.057-.69-.467-.427-.72-1.067-.76-1.91l-.005-.235V2.28c-.005-.224.058-.443.18-.63.12-.165.274-.303.45-.405.18-.095.373-.166.572-.21.197-.047.398-.072.6-.075zm-7.305 2.655c1.38 0 2.505.435 3.315 1.29s1.23 2.1 1.23 3.69c0 .39-.12.675-.375.84-.253.137-.533.214-.818.226l-.172-.001h-5.265c.165 1.38.93 2.055 2.355 2.055.329.01.657-.052.96-.18.27-.135.525-.24.705-.345.18-.105.345-.195.51-.3.197-.111.42-.168.645-.165.285 0 .54.15.78.42.22.254.342.578.345.915.003.239-.076.472-.225.66-.19.223-.419.411-.675.555-.45.274-.941.471-1.455.585-.54.13-1.094.196-1.65.195-.721.006-1.44-.095-2.13-.3-.608-.19-1.167-.513-1.635-.945-.452-.458-.814-.998-1.065-1.59-.255-.728-.377-1.495-.36-2.265-.004-.666.092-1.328.285-1.965.184-.624.49-1.206.9-1.71.424-.511.957-.921 1.56-1.2.698-.327 1.464-.486 2.235-.465zm-40.11.015c1.455 0 2.52.285 3.165.87.599.543.926 1.358.97 2.444l.005.256v5.55c0 .39-.105.69-.315.87-.21.18-.54.27-1.005.27-.339.015-.674-.074-.96-.255-.223-.158-.343-.407-.37-.739l-.005-.146v-.015c-.075.09-.165.18-.255.27-.19.191-.407.353-.645.48-.275.15-.567.265-.87.345-.378.094-.766.14-1.155.135-1.005 0-1.817-.27-2.402-.78-.585-.54-.885-1.26-.885-2.145-.012-.455.08-.907.27-1.32.171-.354.417-.666.72-.915.315-.262.676-.46 1.065-.585.412-.137.833-.242 1.26-.315.48-.09.975-.165 1.44-.21.31-.03.627-.06.955-.086l.5-.034v-.24c-.001-.178-.027-.354-.075-.525-.044-.164-.12-.317-.225-.45-.118-.145-.274-.254-.45-.315-.235-.085-.484-.126-.735-.12-.175-.006-.35.004-.525.03-.158.024-.314.064-.465.12-.159.065-.314.14-.465.225-.195.105-.385.22-.568.345-.165.105-.315.21-.465.285-.184.081-.384.122-.585.12-.318 0-.621-.13-.84-.36-.246-.222-.383-.54-.375-.87.009-.275.11-.539.285-.75.222-.29.503-.53.825-.705.419-.235.868-.412 1.335-.525.604-.147 1.223-.218 1.845-.21zM5.968.509l.2.002c.57 0 1.005.105 1.32.33.272.198.484.465.616.773l.059.157 3.075 8.805L14.19 1.83c.117-.425.39-.79.765-1.02.437-.218.923-.32 1.41-.3.54 0 .975.105 1.29.315.292.195.472.514.495.86V12.75c.004.297-.103.586-.3.81-.195.225-.555.345-1.08.345-.48 0-.825-.12-1.035-.33-.189-.216-.299-.489-.315-.773V5.281l-2.715 7.5c-.09.316-.3.585-.585.75-.273.14-.577.213-.885.21-.48 0-.84-.105-1.08-.3-.21-.181-.378-.405-.493-.656l-.062-.154-2.548-6.765v6.855c.004.297-.103.586-.3.81-.195.225-.555.345-1.08.345-.495 0-.84-.105-1.065-.315-.167-.18-.268-.427-.294-.758l-.006-.172V1.906c0-.495.18-.855.525-1.08.29-.164.61-.266.938-.303L5.969.51zM43.084.57c1.665 0 2.895.375 3.66 1.11.765.735 1.155 1.785 1.155 3.135 0 .481-.065.96-.195 1.425-.145.502-.396.967-.735 1.365-.4.45-.898.804-1.455 1.035-.547.24-1.224.373-2.031.4l-.31.005h-2.1v3.645c.008.297-.087.589-.27.825-.194.24-.554.36-1.094.36-1.123 0-1.41-.593-1.438-1.14l-.002-.09V1.56c-.016-.284.107-.558.33-.735.194-.146.425-.233.665-.252l.145-.003h3.675zm-7.89-.136c.327-.002.65.086.93.256.26.167.422.45.436.754l-.001.116v11.145c0 .42-.135.72-.39.9-.299.193-.65.287-1.005.27-1.123 0-1.41-.552-1.425-1.057V1.636c0-.555.255-1.2 1.455-1.2zm-3.255 3.646c.223.194.36.467.386.759l.004.126v7.725c0 .42-.135.72-.39.9-.299.193-.65.287-1.005.27-1.123 0-1.41-.552-1.438-1.044l-.002-.081v-7.8c.018-.295.139-.578.345-.795.24-.225.615-.345 1.11-.345.353-.023.703.078.99.285zm-6.525 5.28c-.42.045-.825.09-1.215.15-.42.06-.735.12-.945.165-.57.12-.93.285-1.095.495-.16.17-.247.396-.24.63-.018.247.075.489.255.66.18.165.495.24.945.24.735 0 1.305-.18 1.71-.51.34-.277.548-.68.58-1.112l.005-.163V9.36zm27.705-3.345c-.69 0-1.23.24-1.62.735-.405.495-.6 1.185-.6 2.085 0 .9.21 1.605.6 2.085.397.48.997.746 1.62.72.72 0 1.245-.24 1.65-.72.405-.48.6-1.2.6-2.085s-.195-1.59-.585-2.085c-.39-.495-.945-.735-1.665-.735zm10.935-.165c-.48-.01-.947.15-1.32.45-.302.272-.507.633-.588 1.028l-.027.172h3.72c-.013-.174-.049-.346-.105-.51-.078-.207-.19-.4-.33-.57-.142-.183-.328-.328-.54-.42-.258-.102-.533-.153-.81-.15zM42.858 2.956h-1.785V6.69h1.785c.35.005.7-.046 1.035-.15.241-.073.462-.201.645-.375.156-.162.274-.357.345-.57.073-.238.109-.486.105-.735.004-.245-.032-.488-.105-.72-.07-.223-.188-.428-.345-.6-.18-.189-.4-.333-.645-.42-.332-.118-.683-.174-1.035-.165zM30.933 0c.385 0 .759.126 1.065.36.345.255.51.63.51 1.14.016.41-.142.807-.435 1.095-.314.276-.722.42-1.14.405-.418.018-.827-.127-1.14-.405-.296-.292-.454-.696-.435-1.11-.006-.35.113-.688.334-.956l.1-.11.122-.099c.293-.216.652-.33 1.019-.32z\"></path></svg></div><div class=\"mailpoet-top-bar-logo-mobile\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 39 40\"><path fill=\"#FF5301\" d=\"M34.987 29.367c.673-.59 1.67-.623 2.38-.076l.608.481c.441.345.717.86.76 1.418.016.546-.206 1.073-.608 1.443-1.714 1.534-3.929 2.389-6.228 2.405H26.43c-2.234-.001-4.193 1.491-4.784 3.646v.05c-.026.177-.304 1.114-2.152 1.114s-2.127-.937-2.152-1.114v-.05c-.592-2.155-2.551-3.647-4.785-3.646H7.089c-2.3-.016-4.515-.871-6.228-2.405-.411-.364-.635-.895-.608-1.443.023-.545.282-1.053.709-1.393l.608-.48c.705-.56 1.711-.528 2.38.075.88.74 1.989 1.152 3.139 1.165h5.443c2.497.002 4.891.994 6.658 2.76l.278.278.279-.304c1.764-1.769 4.16-2.762 6.658-2.76h5.418c1.158-.007 2.277-.42 3.164-1.164zM10.4.25l.262.004c.962 0 1.696.177 2.228.557.536.39.934.94 1.139 1.57l5.19 14.86L24.18 2.482c.197-.716.659-1.331 1.29-1.722.739-.366 1.557-.54 2.38-.506.912 0 1.646.177 2.178.532.553.371.87 1.006.835 1.67v18.456c.007.503-.173.99-.506 1.367-.33.38-.937.583-1.823.583-.81 0-1.392-.203-1.747-.557-.372-.426-.563-.98-.531-1.545V8.304l-4.583 12.658c-.15.535-.505.989-.987 1.266-.461.238-.974.36-1.494.354-.81 0-1.417-.177-1.822-.506-.427-.366-.75-.837-.937-1.367L12.129 9.29v11.57c.007.503-.174.99-.506 1.367-.33.38-.937.582-1.823.582-.835 0-1.392-.177-1.772-.532-.33-.354-.506-.86-.506-1.57v-18.1c0-.836.303-1.443.886-1.823.686-.386 1.467-.57 2.253-.532z\"></path>
        </svg>
      </div>
    </a>
    <style>#wpbody-content { padding-top: 64px; } .wrap { margin-top: 20px; }</style>
  </div>

  <div class=\"mailpoet-page-header\">
    <div class=\"mailpoet-back-button\">
      <a href=\"?page=mailpoet-subscribers#/\" aria-label=\"Navigate to the lists page\" class=\"components-button is-small has-icon\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M14.6 7l-1.2-1L8 12l5.4 6 1.2-1-4.6-5z\"></path></svg>
      </a>
    </div>
    <h1 class=\"wp-heading-inline\">";
        // line 22
        yield $this->extensions['MailPoet\Twig\I18n']->translate("Import subscribers");
        yield "</h1>
  </div>

  <!-- STEP subscriber data manipulation -->
  ";
        // line 26
        yield from         $this->loadTemplate("subscribers/importExport/import/step_data_manipulation.html", "subscribers/importExport/import.html", 26)->unwrap()->yield($context);
        // line 27
        yield "  <div id=\"import_container\" class=\"mailpoet-tab-content\"></div>
</div>

<script type=\"text/javascript\">
  var
    maxPostSize = '";
        // line 32
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["maxPostSize"] ?? null), "html", null, true);
        yield "',
    roleBasedEmails = JSON.parse(\"";
        // line 33
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["role_based_emails"] ?? null), "js"), "html", null, true);
        yield "\"),
    maxPostSizeBytes = '";
        // line 34
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["maxPostSizeBytes"] ?? null), "html", null, true);
        yield "',
    importData = {},
    mailpoetColumnsSelect2 = JSON.parse(\"";
        // line 36
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["subscriberFieldsSelect2"] ?? null), "js"), "html", null, true);
        yield "\"),
    mailpoetColumns = JSON.parse(\"";
        // line 37
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["subscriberFields"] ?? null), "js"), "html", null, true);
        yield "\"),
    mailpoetSegments = JSON.parse(\"";
        // line 38
        yield $this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('MailPoetVendor\Twig\Runtime\EscaperRuntime')->escape(($context["segments"] ?? null), "js"), "html", null, true);
        yield "\");
</script>

";
        // line 41
        yield $this->extensions['MailPoet\Twig\I18n']->localize(["noMailChimpLists" => $this->extensions['MailPoet\Twig\I18n']->translate("No active lists found"), "serverError" => $this->extensions['MailPoet\Twig\I18n']->translate("Server error:"), "select" => $this->extensions['MailPoet\Twig\I18n']->translate("Select", "Form input type"), "wrongFileFormat" => $this->extensions['MailPoet\Twig\I18n']->translate("Only comma-separated (CSV) file formats are supported."), "maxPostSizeNotice" => MailPoetVendor\Twig\Extension\CoreExtension::replace($this->extensions['MailPoet\Twig\I18n']->translate("Your CSV is over %s and is too big to process. Please split the file into two or more sections."), ["%s" =>         // line 46
($context["maxPostSize"] ?? null)]), "dataProcessingError" => $this->extensions['MailPoet\Twig\I18n']->translate("Your data could not be processed. Please make sure it is in the correct format."), "noValidRecords" => $this->extensions['MailPoet\Twig\I18n']->translate("No valid records were found. This file needs to be formatted in a CSV style (comma-separated). Look at some [link]examples on our support site.[/link]"), "importNoticeSkipped" => $this->extensions['MailPoet\Twig\I18n']->translate("%1\$s records had issues and were skipped."), "importNoticeInvalid" => $this->extensions['MailPoet\Twig\I18n']->translate("%1\$s emails are not valid: %2\$s"), "importNoticeRoleBased" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("%1\$s [link]role-based addresses[/link] are not permitted: %2\$s", "Error message when importing addresses like postmaster@domain.com"), "importNoticeDuplicate" => $this->extensions['MailPoet\Twig\I18n']->translate("%1\$s emails appear more than once in your file: %2\$s"), "hideDetails" => $this->extensions['MailPoet\Twig\I18n']->translate("Hide details"), "showDetails" => $this->extensions['MailPoet\Twig\I18n']->translate("Show more details"), "segmentSelectionRequired" => $this->extensions['MailPoet\Twig\I18n']->translate("Please select at least one list"), "addNewList" => $this->extensions['MailPoet\Twig\I18n']->translate("Add new list"), "addNewField" => $this->extensions['MailPoet\Twig\I18n']->translate("Add new field"), "addNewColumuserColumnsn" => $this->extensions['MailPoet\Twig\I18n']->translate("Add new list"), "userColumns" => $this->extensions['MailPoet\Twig\I18n']->translate("User fields"), "selectedValueAlreadyMatched" => $this->extensions['MailPoet\Twig\I18n']->translate("The selected value is already matched to another field."), "confirmCorrespondingColumn" => $this->extensions['MailPoet\Twig\I18n']->translate("Confirm that this field corresponds to the selected field."), "columnContainInvalidElement" => $this->extensions['MailPoet\Twig\I18n']->translate("One of the fields contains an invalid email. Please fix it before continuing."), "january" => $this->extensions['MailPoet\Twig\I18n']->translate("January"), "february" => $this->extensions['MailPoet\Twig\I18n']->translate("February"), "march" => $this->extensions['MailPoet\Twig\I18n']->translate("March"), "april" => $this->extensions['MailPoet\Twig\I18n']->translate("April"), "may" => $this->extensions['MailPoet\Twig\I18n']->translate("May"), "june" => $this->extensions['MailPoet\Twig\I18n']->translate("June"), "july" => $this->extensions['MailPoet\Twig\I18n']->translate("July"), "august" => $this->extensions['MailPoet\Twig\I18n']->translate("August"), "september" => $this->extensions['MailPoet\Twig\I18n']->translate("September"), "october" => $this->extensions['MailPoet\Twig\I18n']->translate("October"), "november" => $this->extensions['MailPoet\Twig\I18n']->translate("November"), "december" => $this->extensions['MailPoet\Twig\I18n']->translate("December"), "noDateFieldMatch" => $this->extensions['MailPoet\Twig\I18n']->translate("Do not match as a 'date field' if most of the rows for that field return the same error."), "emptyFirstRowDate" => $this->extensions['MailPoet\Twig\I18n']->translate("First row date cannot be empty."), "verifyDateMatch" => $this->extensions['MailPoet\Twig\I18n']->translate("Verify that the date in blue matches the original date."), "pm" => $this->extensions['MailPoet\Twig\I18n']->translate("PM"), "am" => $this->extensions['MailPoet\Twig\I18n']->translate("AM"), "dateMatchError" => $this->extensions['MailPoet\Twig\I18n']->translate("Error matching date"), "columnContainsInvalidDate" => $this->extensions['MailPoet\Twig\I18n']->translate("One of the fields contains an invalid date. Please fix before continuing."), "listCreateError" => $this->extensions['MailPoet\Twig\I18n']->translate("Error adding a new list:"), "columnContainsInvalidElement" => $this->extensions['MailPoet\Twig\I18n']->translate("One of the fields contains an invalid email. Please fix before continuing."), "customFieldCreateError" => $this->extensions['MailPoet\Twig\I18n']->translate("Custom field could not be created"), "subscribersCreated" => $this->extensions['MailPoet\Twig\I18n']->translate("%1\$s subscribers added to %2\$s."), "subscribersUpdated" => $this->extensions['MailPoet\Twig\I18n']->translate("%1\$s existing subscribers were updated and added to %2\$s."), "importNoAction" => $this->extensions['MailPoet\Twig\I18n']->translate("No subscribers were added or updated."), "importNoWelcomeEmail" => $this->extensions['MailPoet\Twig\I18n']->translate("Note: Imported subscribers will not receive any Welcome Emails"), "readSupportArticle" => $this->extensions['MailPoet\Twig\I18n']->translate("Read the support article."), "validationStepHeading" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Are you importing an existing list or contacts from your address book?", "Question for importing subscribers into MailPoet"), "validationStepRadio1" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Existing list", "User choice to import an existing email list"), "validationStepRadio2" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Contacts from my address book", "User choice to import his address book contacts"), "validationStepBlock1" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("You will need to ask your contacts to join your list instead of importing them. This is a standard practice to ensure good email deliverability.", "Paragraph explaining the user what to do when importing his contacts."), "validationStepBlock2" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("If you send with MailPoet, we will detect if you import subscribers without their explicit consent and suspend your account.", "Paragraph warning what happens if user imports his contacts and sends with MailPoet"), "validationStepBlockButton" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("How to ask your contacts to join your list", "Button to visit a support article"), "validationStepLastSentHeading" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("When did you last send an email to this list?", "Question for users importing their list"), "validationStepLastSentOption1" => $this->extensions['MailPoet\Twig\I18n']->translate("Over 2 years ago"), "validationStepLastSentOption2" => $this->extensions['MailPoet\Twig\I18n']->translate("Between 1 and 2 years ago"), "validationStepLastSentOption3" => $this->extensions['MailPoet\Twig\I18n']->translate("Within the last year"), "validationStepLastSentOption4" => $this->extensions['MailPoet\Twig\I18n']->translate("Within the last 3 months"), "validationStepLastSentNext" => $this->extensions['MailPoet\Twig\I18n']->translate("Next"), "previousStep" => $this->extensions['MailPoet\Twig\I18n']->translate("Previous step"), "nextStep" => $this->extensions['MailPoet\Twig\I18n']->translate("Next step"), "import" => $this->extensions['MailPoet\Twig\I18n']->translate("Import"), "seeVideo" => $this->extensions['MailPoet\Twig\I18n']->translate(" See video guide"), "importAgain" => $this->extensions['MailPoet\Twig\I18n']->translate("Import again"), "viewSubscribers" => $this->extensions['MailPoet\Twig\I18n']->translate("View subscribers"), "methodPaste" => $this->extensions['MailPoet\Twig\I18n']->translate("Paste the data into a text box"), "pickLists" => $this->extensions['MailPoet\Twig\I18n']->translate("Pick one or more list(s)"), "pickListsDescription" => $this->extensions['MailPoet\Twig\I18n']->translate("Pick the list that you want to import these subscribers to."), "select" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Select", " Verb"), "createANewList" => $this->extensions['MailPoet\Twig\I18n']->translate("Create a new list"), "updateExistingSubscribers" => $this->extensions['MailPoet\Twig\I18n']->translate("Update existing subscribers’ information, like first name, last name, etc."), "updateExistingSubscribersYes" => $this->extensions['MailPoet\Twig\I18n']->translate("Yes"), "updateExistingSubscribersNo" => $this->extensions['MailPoet\Twig\I18n']->translate("No"), "addSubscribersToSegment" => $this->extensions['MailPoet\Twig\I18n']->translate(" To add subscribers to a mailing segment, [link]create a list[/link]."), "methodUpload" => $this->extensions['MailPoet\Twig\I18n']->translate("Upload a file"), "methodMailChimp" => $this->extensions['MailPoet\Twig\I18n']->translate("Import from Mailchimp"), "methodMailChimpLabel" => $this->extensions['MailPoet\Twig\I18n']->translate("Enter your Mailchimp API key"), "methodMailChimpDescription" => $this->extensions['MailPoet\Twig\I18n']->translate("Find your Mailchimp API key in our [link]documentation[/link]."), "methodMailChimpVerify" => $this->extensions['MailPoet\Twig\I18n']->translate("Verify"), "methodMailChimpSelectList" => $this->extensions['MailPoet\Twig\I18n']->translate("Select list(s)"), "methodMailChimpSelectPlaceholder" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Select", "Verb"), "matchData" => $this->extensions['MailPoet\Twig\I18n']->translate("Match data"), "showMoreDetails" => $this->extensions['MailPoet\Twig\I18n']->translate("Show more details"), "pasteLabel" => $this->extensions['MailPoet\Twig\I18n']->translate("Copy and paste your subscribers from Excel/Spreadsheets"), "pasteDescription" => $this->extensions['MailPoet\Twig\I18n']->translate("This file needs to be formatted in a CSV style (comma-separated-values.) Look at some [link]examples on our support site[/link]."), "methodSelectionHead" => $this->extensions['MailPoet\Twig\I18n']->translate("How would you like to import subscribers?"), "cleanListText1" => $this->extensions['MailPoet\Twig\I18n']->translate("We highly recommend cleaning your lists before importing them to MailPoet."), "cleanListText2" => $this->extensions['MailPoet\Twig\I18n']->translate("Lists can have up to 20% of invalid addresses after a year because people change jobs and stop using their addresses. If you send with MailPoet, we will pause your sending and ask you to clean your list if we detect over 10% of invalid addresses."), "tryListCleaning" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("How can I clean my list?", "CTA button label"), "cleanedList" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("I cleaned my list", "Text in button"), "listCleaningGotIt" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Got it, I’ll proceed to import", "Text in a link"), "subscribed" => $this->extensions['MailPoet\Twig\I18n']->translate("Subscribed"), "unsubscribed" => $this->extensions['MailPoet\Twig\I18n']->translate("Unsubscribed"), "inactive" => $this->extensions['MailPoet\Twig\I18n']->translate("Inactive"), "dontUpdate" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Don’t update", "This is a value in a select box for \"Set new subscribers’ status to\""), "newSubscribersStatus" => $this->extensions['MailPoet\Twig\I18n']->translate("Set new subscribers’ status to"), "consentSubscribed" => $this->extensions['MailPoet\Twig\I18n']->translate("Choose “Subscribed” only if you have explicit consent to send them bulk or marketing emails. [link]Why is consent important?[/link]"), "congratulationResult" => $this->extensions['MailPoet\Twig\I18n']->translate("Congratulations, you’ve imported your subscribers!"), "suppressionListReminder" => $this->extensions['MailPoet\Twig\I18n']->translate("Are you importing subscribers from another marketing service provider? You may need to separately import the list of bad or previously unsubscribed addresses to avoid contacting them. [link]See how to import a suppression list.[/link]"), "existingSubscribersStatus" => $this->extensions['MailPoet\Twig\I18n']->translate("Update existing subscribers’ status to"), "assignTagsLabel" => $this->extensions['MailPoet\Twig\I18n']->translate("Assign tags"), "assignTagsDescription" => $this->extensions['MailPoet\Twig\I18n']->translate("Pick a tag or create a new one to assign to these subscribers."), "addNewTag" => $this->extensions['MailPoet\Twig\I18n']->translate("Add new tag")]);
        // line 146
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "subscribers/importExport/import.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  120 => 146,  118 => 46,  117 => 41,  111 => 38,  107 => 37,  103 => 36,  98 => 34,  94 => 33,  90 => 32,  83 => 27,  81 => 26,  74 => 22,  54 => 4,  50 => 3,  45 => 2,  43 => 1,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "subscribers/importExport/import.html", "/home/circleci/mailpoet/mailpoet/views/subscribers/importExport/import.html");
    }
}

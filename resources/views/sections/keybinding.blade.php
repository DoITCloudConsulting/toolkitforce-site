<div class="keybinding">
    <ul class="keybinding__detail">
        <h3 class="keybinding__title">DML Functions</h3>
        <li>Insert records <span class="keybinding__label">$salesforce->insert(array(...))</span></li>
        <li>Update records <span class="keybinding__label">$salesforce->Update(array(...))</span></li>
        <li>delete records <span class="keybinding__label">$salesforce->delete(array('001f40...'))</span></li>
        <li>Undelete records <span class="keybinding__label">$salesforce->Undelete(array('001f40...'))</span></li>
        <li>Upsert records <span class="keybinding__label">$salesforce->Upsert(array(...))</span></li>
        <li>Queries <span class="keybinding__label">$salesforce->query('select Id, Name fro)</span></li>
        <li>Search / SOSL <span class="keybinding__label">$salesforce->sosl('Find {doit} Returning Acc..')</span></li>
    </ul>
    <ul class="keybinding__detail">
        <h3 class="keybinding__title">Metadata functions</h3>
        <li><span class="keybinding__label">$salesforce->describeGlobal();</span> Describe Global </li>
        <li><span class="keybinding__label">$salesforce->describeLayout('Account');</span> Describe layout</li>
        <li><span class="keybinding__label">$salesforce->describeSObject('Account');</span> Describe SObject</li>
        <li><span class="keybinding__label">$salesforce->getMeAllUpdated('Case', 'start', 'end');</span> Get me all updated</li>
        <li><span class="keybinding__label">$salesforce->getMeAllDeleted('Case', 'start', 'end');</span> Get me all Deleted</li>
    </ul>
</div>
<div class="callout">
    <p>Read our documentation for advanced functions and customizations</p>
    <a href="/documentation" class="button--primary">Documentation</a>
</div>



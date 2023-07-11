The following repo is registered as a submodule in the hbv2-controller repo. 
The main thing is that the .github/workflow/submodule-workflow.yml file is defined. Which I am using to trigger an event to hbv2-controller repo whenever any change happen in the hbv2-user repo and push changes.
Here is the code

```
steps:
      - name: Dispatch event to parent repo
        uses: peter-evans/repository-dispatch@v1 ## event dispatcher action
        with:
          token: ${{ secrets.PAT }}  # Personal Access Token with appropriate repo scope. It is the Personal Access token from the parent repo account. If both repos are under same account then generate the Token of that same account
          repository: aatifbangash/hbv2-controller ## parent repo 
          event-type: 'hello_world' ### event name. It will be catched in the parent repo workflow file
          client-payload: '{"ref": "${{ github.ref }}", "sha": "${{ github.sha }}", "microservice_name": "hbv2-user"}' ### extra payload send to the parent repo workflow
```

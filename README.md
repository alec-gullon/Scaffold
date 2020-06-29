#####

# Local Development Scaffold

Once you have cloned the repository into the working directory of your choice, run through the following
steps to put together a local environment to work in.

## Step 1: Configure your PHP setup

Get a PHP setup of your choosing running locally and update its php.ini file to include the settings found in
the `config/php.ini` file (you can just copy these settings to the end of your existing php.ini
file). Configure your web root to point at `cms/home/channels/lancaster`.

## Step 2: Setup the repos directory

In the `repos` directory, you should clone and set up the `layoutlib`, `foundation-styles`, `jslib` 
and `cmslib` repos. You should also run the following commands within particular repos:

- `gulp build` in `foundation-styles` (without a version bump)
- `gulp build-scripts` in `jslib`

This will set up the basic resources that will soon be linked to in your local environment.

## Step 3: Download files from kormos

Using the method of your preference, download the current `cms.sqlite` database from the `kormos` server and 
place this in the corresponding place under the `cms` directory of the project. At time of writing, this
is located under the `/var/local/sqlite/` directory.

Then download the following two directories from `/home/channels/lancaster` on `kormos` and place them in
the corresponding place under the `cms` directory of the project:

- `media/wdp`
- `media/lancaster-university/style-assets`

Avoid downloading the entire `media` directory as this is liable to take a while and will download a ton
of inessential files.

Finally, make sure to also delete `media/wdp/style-assets/php/lib/src` from your local filesystem otherwise the links
to `cmslib` won't be setup correctly.

## Step 4: Configure config.ini file

Find the config.ini file (located at `media/wdp/config/config.ini`) and add the following line to the top of it:

``localpath = YOURLOCALPATH``

where YOURLOCALPATH is set to be equal to the fully qualified path to the `cms` directory on your system: e.g., 
something along the lines of `C:\Users\Work\Sandbox\cms`. Then go through the config items in that file and prepend 
`{local}` to any config items which reference the directory root on the `kormos` filesystem: e.g.,  `sqlite.db.location = /var/local/sqlite/cms.sqlite` 
would become `sqlite.db.location = {local}/var/local/sqlite/cms.sqlite`.

## Step 5: Setup the symlinks

Open a command line and at the project root run the command `php dump-symlinks.php`. (On Windows, you will
have to make sure you run your command line as an administrator otherwise the following will not work.)

This will now generate all the symlinks from your local environment to the project files kept in the
repositories under `repos`. A few of these might be skipped since the target file doesn't currently exist
in the corresponding repo. This is fine: you can regenerate the symlinks at any time (e.g., to add new ones or
setup ones you don't currently need at a later date) by simply re-running `php dump-symlinks.php` from the project
root as you just did.

Symlinks can be added to the existing set in `config\symlinks.php`.

## Step 6: Start developing

Download a few files from `kormos` and verify that what you see locally looks the same as what you see on 
`preview.lancs.ac.uk`. Test out the symlinks by making edits to project files in `layoutlib`, `jslib` and `cmslib` and 
seeing these changes reflected locally.

There are limits to what can be achieved without complete virtualization. However, the above provides a solid basis to
get started with enabling some kind of sensible form of local development and for 95% of use cases will provide a
safe and agile environment to work in.

If you find some form of development relies on another source of data on `kormos` (e.g., the `cache` or `feeds` directories
or the `geoip.sqlite` database), then try downloading that file from the server into the same place locally and most of
the time you should be able to make what you are doing locally work.



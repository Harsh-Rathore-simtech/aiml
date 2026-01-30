# Deployment Instructions

You can host this website for free using either **Vercel** (recommended, requires Git) or **InfinityFree** (traditional file upload).

## Option 1: Vercel (Recommended)
*Best for automatic updates and speed.*

1.  **Push to GitHub**:
    - Create a new repository on [GitHub.com](https://github.com/new).
    - Push this entire `xafran` folder to that repository.
2.  **Deploy**:
    - Go to [Vercel.com](https://vercel.com) and sign up/login.
    - Click "Add New..." -> "Project".
    - Select your `xafran` repository.
    - Click **Deploy**.
    - Vercel will detect the `vercel.json` file I added and handle the rest!

## Option 2: InfinityFree
*Best if you don't want to use Git.*

1.  **Sign Up**:
    - Go to [InfinityFree.net](https://infinityfree.net) and create an account.
    -  Create a new "Account" (website) inside their dashboard.
2.  **Upload Files**:
    - Open the "File Manager" from the control panel.
    - Go into the `htdocs` folder.
    - Delete the default `index2.html` if it exists.
    - Upload **all files and folders** from this directory into `htdocs`.
3.  **Done**:
    - Visit your domain!

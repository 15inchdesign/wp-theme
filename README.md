# wp-theme

**Instructions:**

- Use the latest version of Wordpress.

- The database must have a custom prefix.

- You must use version control (the more commits, the better). - Use git/bitbucket.

- Only submit your work - not all of the Wordpress files.

- All custom features must be inside a project specific plugin.

  

**Before submitting:**

- Add the database dump to the root of the project.

- Merge everything into master and tag version 1.0.

- Send us the link to your repo.

  

**Tasks:**

**1. Edit wp-config to support a different environment**

a. Be able to use the same wp-config to add credentials for development, staging and production.

**2. Create a Theme**

**3. Slice and implement the provided design**

a. Use your best judgement to decide on what is the content, and what are other

stuff like widgets quotes, and how it will be best to implement them so that the editor can make changes.

**4. Implement the design inside a custom post type - News**

a. Don’t use default posts from Wordpress; use custom!

b. Create a custom taxonomy for the news post type

c. Create the URL structure:

i. /news/category-name/ (Top Category)

ii. /news/category-name/sub-category-name/ (Sub Category)

iii. /news/category-name/sub-category-name/product-name/ (Single Page)

iv. /news/ (Display all news,categories and subcategories)

**5. Custom Ajax listing**

a. On the listing page, use swipe pagination with​ load more via Ajax.

b. It should be loaded via action_hooks.

  

**Bonus points:**

- Boilerplate for plugin.

- Use Wordpress Ajax.

- load more should be reusable on other listings.

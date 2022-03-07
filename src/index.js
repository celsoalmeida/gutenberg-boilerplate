const { registerBlockType } = wp.blocks;

registerBlockType('toolkit/block',{

  // built-in attributes
  title: 'Block',
  descriptions: 'Demo Block for your Theme.',
  icon: 'format-image',
  category: 'layout',
  
  // costum attributes
  attributes: {
    author: {
      type: 'string'
    }
  },

  // built-int functions
  // what you will see in backoffice
  edit({ attributes, setAttributes }) {

    // Function to save attributes
    function updateAuthor(event) {
      setAttributes({ author: event.target.value });
    }

    return <input value={attributes.author} onChange={ updateAuthor } type="text" />;
  },

  // what you will see in frontoffice
  save({ attributes }) {
    return <div>{ attributes.author }</div>;
  }
});
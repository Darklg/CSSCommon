# Thanks to : http://stackoverflow.com/a/15766439

class Sass::Tree::Visitors::Perform < Sass::Tree::Visitors::Base

  # Removes all comments completely
  def visit_comment(node)
    return []
  end

end

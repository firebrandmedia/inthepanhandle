{exp:weblog:entries weblog="post" limit="1"}
                <h1>{title}</h1>
                {/exp:weblog:entries}


                <h4>Submit a Rating for this Entry:</h4>
                {exp:rating:form entry_id="{segment_3}" form_name="test" require_membership="no" return="rating/thanks"}

                {if logged_out}
                <p><label for="name">Name:</label> <input type="text" name="name" id="name" value="{name}" /></p>
                <p><label for="email">Email Address:</label> <input type="text" name="email" id="email" value="{email}" /></p>
                <p><input type="checkbox" name="save_info" id="save_info" value="y" {save_info} /> <label for="save_info">Remember my contact info for next time?</label></p>
                {/if}

                <p><label for="rating">Your Rating:</label>
                <select name="rating" id="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select></p>
                <p><label for="review">Your Review:</label><br />
                <textarea name="review" id="review" rows="10" cols="40"></textarea></p>
                <p><input type="submit" name="submit" value="Submit!" /></p>

                {/exp:rating:form}

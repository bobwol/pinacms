<?php
/*
* PinaCMS
* 
* THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
* "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
* LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
* A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
* OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
* SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
* LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
* DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
* THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
* (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
* OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*
* @copyright � 2010 Dobrosite ltd.
*/

if (!defined('PATH')){ exit; }



require_once PATH_CORE.'classes/TableDataGateway.php';

class SlideGateway extends TableDataGateway
{
	var $table = 'cody_slide';
	var $orderBy = 'slide_order ASC';
	var $fields = array
	(
		"slide_id", "site_id", "slide_filename",
		"slide_width", "slide_height", "slide_type", "slide_size",
		"slide_alt", "slide_href",
		"slide_enabled", "slide_order"
	);

	var $useSiteId = true;

	function findAvailable()
	{
		$siteId = intval($this->siteId);
		return $this->db->table("SELECT * FROM ".$this->table." WHERE site_id = '".$siteId."' AND slide_enabled = 'Y'".$this->getOrderBy());
	}
}
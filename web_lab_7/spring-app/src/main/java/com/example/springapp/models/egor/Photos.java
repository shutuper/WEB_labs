package com.example.springapp.models.egor;

import lombok.Data;

import javax.persistence.*;

@Entity
@Data
public class Photos {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	@Column(nullable = false)
	private String quality;

	@Column(nullable = false)
	private String date;

	@ManyToOne
	private Author author;

	@ManyToOne
	private Place place;

}
